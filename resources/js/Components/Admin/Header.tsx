import React, { PropsWithChildren, useState } from "react";
import { FiAlignJustify, FiArrowRightCircle } from "react-icons/fi";
// import imageUrl from "../../assets/logo.png";
import imageUrl from "../../../../public/images/logo/logo.png";
import ResponsiveNavLink from "../ResponsiveNavLink";
import { Link } from "@inertiajs/react";

interface HeaderProps {
    isOpen: boolean;
    setIsOpen: (isOpen: boolean) => void;
}

const Header: React.FC<HeaderProps> = ({ setIsOpen, isOpen }) => {
    const toggleSidebar = () => {
        setIsOpen(!isOpen);
    };

    return (
        <div className="w-screen h-[80px] bg-white border border-gray-200 rounded-lg shadow-xl sticky top-0">
            <div className="flex flex-row justify-between items-center mx-auto p-4 ">
                <div className="flex gap-3">
                    <div>
                        <button onClick={toggleSidebar}>
                            {isOpen ? (
                                <FiAlignJustify size={24} />
                            ) : (
                                <FiAlignJustify size={24} />
                            )}
                        </button>
                    </div>
                </div>
                <div className="logo">
                    <img
                        src={imageUrl}
                        width="55"
                        height="35"
                        alt=""
                        className="logo_normal"
                    />
                </div>

                <div>
                    <div>
                        Profile
                        <Link
                            method="post"
                            href={route("admin.logout")}
                            as="button"
                        >
                            Log Out
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Header;
