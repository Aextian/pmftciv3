import React, { PropsWithChildren, useState } from "react";
import { FiAlignJustify, FiArrowRightCircle } from "react-icons/fi";


interface HeaderProps {
    isOpen: boolean;
    setIsOpen: (isOpen: boolean) => void;
}

const Header : React.FC<HeaderProps>  = ({setIsOpen,isOpen,}) => {

    const toggleSidebar= () => {
        setIsOpen(!isOpen);
    };

    return (
        <div className="w-screen h-[60px] bg-white border border-gray-200 rounded-lg shadow sticky top-0">
            <div className="flex flex-row justify-between items-center mx-auto p-4 flex-wra">
                <div className="flex gap-3">
                    <div>
                        <button onClick={toggleSidebar}>
                            {isOpen ? (
                                <FiAlignJustify size={24} />
                            ) : (
                                <FiArrowRightCircle size={24} />
                            )}
                        </button>
                    </div>

                    <div>search icon</div>
                </div>
                <div className="logo">logo</div>

                <div>
                    <div>Profile</div>
                </div>
            </div>
        </div>
    );
};

export default Header;
